# searchinternship
for signzy internship
1. load the demo.html page there i given input box for giving input

2.when clicks on the button it will call the src.js file. value n the text field will be passed to the javascript file.

3.The java script checks for the length of the characters and give warnings(atleast 3 characters needed)

4.the javascript function calls search.php by passing the value as xmlhttp request

5.In the search.php the script searches for the input value, it checks each and every data by concatinating the first name and last name.

6.after finding all the search results it send backs response as an array of 5 elements

7.so the response will come back there so that we can use it for further calculations.



Database creation.
created database  and table demo with fields nameFirst, nameLast and id for indexing.
inserted values by batch inserting.
1.changed the files in to text format and the readed all values through a php script

2.added values in to an array and created an output similar as ('Vishnou ', 'Coca'), ('Yamuna ', 'Winfred '), ('Kaoru ', 'Lenny '), ('Kamil ', 'Ofelia '), ('Carma ', 'Marian '), ('Kapena ', 'Chan '), ('Pajani ', 'Chisholm '), ('Kamila ', 'Rife '), ('Itesh ', 'Selma '), ('Laïli ', 'Kandice '), ('Kshitij ', 'Syble '), ('Ajith ', 'Vetter '), ('Shakti ', 'Necole '), ('Kaneonuskatew ', 'Sasaki '), ('Krishnin ', 'Turlington '), ('Bhaskara ', 'Sutphin '), ('Surinder ', 'Veda '), ('Kamar ', 'Lavern '), ('Devadas ', 'Coulston '), ('Kyran ', 'Linh '), ('Karola ', 'Jordison '), ('Abdelhakim ', 'Katharine '), ('Abigaëlle ', 'Lorretta '), ('Narayana ', 'Nellie '), ('Vasanta ', 'Watters '), ('Manju ', 'Lynda '), ('Ishvara ', 'Whitcomb ') etc..

3.then inserted in to database using  
INSERT INTO demo (nameFirst, nameLast) VALUES (value1 ,value2) ,(value3, value4)....

4. so more than 1400 rows inserted.

