
## Release process

_If the instance is not on, ask Haley to turn on `US_UAT_ZoneD_EC2_OUR_TEST_NOW ` under this region `N Virginia region`_

_And ask for the release number_

>Never agree to system updates 

a. Write down current version and the new version(if not provided ask Haley or Vladimir) on a sheet 

 

1. Navigate to an appropriate folder (`D:\regdelta`) and use the following command to clone the RegDelta repo or create a Code folder in D  

    a. Open Git Bash and run following commands
    
    For a specific stream, please use:  

    This holds private keys used for public key authentication & Generate Bourne shell commands on stdout

    ```sh
    eval $(ssh-agent -s)
    ```

    Add RSA or DSA identities to the authentication agent i.e.,ssh-agent

    ```sh
    ssh-add /c/Keys/JwgRelease
    ```
   
    This clones the repo, that is authenticating with the previously set keys

    ```sh
    git clone git@bitbucket.org:jwgregdelta/master-regdelta-project.gitregdelta
    ```

    Move to cloned project folder

    ```sh
    cd regdelta
    ```
    
    Change the branch, from master to provided

    _Ask for release number_

    ```sh
    git checkout release_(release_number)
    ```

    b. Close git bash once finished

2. Navigate to `regdelta/play_frontend`

    Open command prompt in play_frontend folder and run  
    ```sh
    bin\activator dist
    ```
   _(This may take a while to run)_

    Once it’s done with a green success, close CMD  

3. Navigate to D drive and rename the newly created `"regdelta"` folder in the format: `3.MM.DD.TT` e.g. 3.10.26.1250 

4. Copy `play_frontend-1.0-SNAPSHOT.zip` from `D:\regdelta\(last_release)\play_frontend\target\universal`

5. Unzip the copied `play_frontend-1.0-SNAPSHOT.zip` in 3.MM.DD.TT i.e. our newly created folder

    _(This may take some time)_
 
6. Cut everything inside - `play_frontend-1.0-SNAPSHOT` folder and paste it in the newly created folder (otherwise path is duplicated)  

7. Copy `443.bat` file from a previous version and paste into `D:\regdelta\(new_version)\play_frontend-1.0-SNAPSHOT`
  
8. Copy `local.conf ` file from a previous version and paste into `D:\regdelta\(new_version)\play_frontend-1.0-SNAPSHOT\conf`  

 
    (NOT REQUIRED AT THE MOMENT) 

    +For single sign-on only also copy:    

    generated.keystore  

    Ip-metadata.xml  

    Saml-keystore.jks  

    (NOT REQUIRED AT THE MOMENT) 

9. Copy and paste `Local.properties` file from previous version to `D:\regdelta\new_version)\ml_delivery\deploy`  

10. Go to `Task Scheduler` and in `“Auto Start Play Framework”` change the file path in the tab `“actions” - 'start a program'` e.g. `D:\regdelta\(new_version)\play_frontend-1.0-SNAPSHOT` 

    >Go to Task Scheduler open Task Scheduler Library and open properties on At System Startup, On the Actions tab click on Edit and change the name of the folder e.g. D:\regdelta\(new_version)\play_frontend-1.0-SNAPSHOT .

    > Task Scheduler > Task SchedulerLibrary > “At sys startup (right click) [properties] > actions > edit 
    (now change the name of the folder i.e (new_version))

 
11. After that follow the prompts 
    > Password is the same as the one used for logging in

 
12. Navigate to `D:\regdelta\(new_version)3\ml_delivery`

    open cmd
    _For an update only only use the following commands_
 
    ```sh
    ml local bootstrap
    ```
    _***(run command twice when updating from before that version to after that version)_

    ```sh
     ml local deploy modules 
    ```
13. Restart the server

    a. confirm the version no on the front-end

    > Logon to the RegDelta site e.g. test.regdelta.com and check that version on admin page correspondents with the release version 

    _(if the front-end works no need to check)_

    Check that“RUNNING_PID” file exists and located in D:\regdelta\03.08.29.0935\play_frontend-1.0-SNAPSHOT  

 

### THE REST IS NOT REQUIRED AT THE MOMENT 
To test SSO 

https://localhost:443 

with SSO you will be redirected to: 

