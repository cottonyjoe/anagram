ANAGRAM

Description
-----------
The aim is to know if two words (or any 2 strings) are anagrams or not.
This will spin up a container called 'test' thanks to docker.


Execution
---------
To test if two words are anagrams, execute the following command if current directory:
	docker-compose run test -c '/scripts/anagram.php <word1> <word2>'


Examples
--------
$ docker-compose run test -c '/scripts/anagram.php vhvhb hbvhvv'
'vhvhb' and 'hbvhvv' are NOT anagrams
$ docker-compose --project-name bb run test -c '/scripts/anagram.php vhvhb hbvhv'
'vhvhb' and 'hbvhv' are anagrams


Troubleshooting
---------------
Ensure that test/anagram.php has execution privileges. If necessary, execute:
	chmod 755 test/anagram.php
and relaunch test.