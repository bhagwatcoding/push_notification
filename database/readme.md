Rule of Database.
1. db->insert('user', ['fname'=> "nitin", 'lname'=> "rathour", 'email'=> 'workinfoanalysis@gmail.com']);
2. db->update('user', ['lname'=> "sharma"], 'lname = "kumar"');
3. db->delete('user', 'id = "47"');
4. db->sql('SELECT * FROM useremail');
5. db->select('user', '*', null, null, null, "2");
6. db->pagination('user', null, null, "2");
7. db->getResult();