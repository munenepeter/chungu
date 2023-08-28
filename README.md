# AWS Load Balancer

distribute internal or external traffic within the servers

there are 3 types

### Application

- works in layer 7 (HTTP, HTTPS)
- external & internal

#### How to set up

##### Scenario

   +----------------------------------------------------+
  VPC                                                   |
   |            +--------------+                        |
   |            | pub subnet   |                        |
Internet        | app' load    |                        |
Gateway         |              |                        |
   |            +--------------+                        |
   |                                                    |
 NAT Gateway                                            |
   |   +--------------+       +------------+            |
   |   | pri subnet   |       | pri subnet |            |
   |   |              |       |            |            |
   |   |    EC2       |       |    EC2     |            |
   |   +--------------+       +------------+            |
   |                                                    |
   |                                                    |
   +----------------------------------------------------+


### Network

- layer 4 (TCP, UDP, TLS)
- Internal only

### Gateway

- Layer 3 (IP)
- Internal only