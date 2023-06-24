
   InvalidArgumentException 

  Unexpected end of input

  at C:\laragon\www\chungu\vendor\psy\psysh\src\Shell.php:899
    [90m895[0m[90m▕ [0m
    [90m896[0m[90m▕ [0m[35;1m        if (![0m[39;1m$this[0m[35;1m->[0m[39;1mhasValidCode[0m[35;1m()) {[0m
    [90m897[0m[90m▕ [0m[35;1m            [0m[39;1m$this[0m[35;1m->[0m[39;1mpopCodeStack[0m[35;1m();[0m
    [90m898[0m[90m▕ [0m
[31;1m  ➜ [0m[3;1m899[0m[90m▕ [0m[35;1m            throw new \InvalidArgumentException([0m[37m'Unexpected end of input'[0m[35;1m);[0m
    [90m900[0m[90m▕ [0m[35;1m        }[0m
    [90m901[0m[90m▕ [0m[35;1m    }[0m
    [90m902[0m[90m▕ [0m
    [90m903[0m[90m▕ [0m[35;1m    [0m[90;3m/**[0m

  1   C:\laragon\www\chungu\vendor\psy\psysh\src\Shell.php:1343
      Psy\Shell::setCode("'echo")

  2   C:\laragon\www\chungu\vendor\laravel\tinker\src\Console\TinkerCommand.php:76
      Psy\Shell::execute("'echo")
