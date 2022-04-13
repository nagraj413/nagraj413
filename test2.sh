echo "What is your first name?"
read fname
echo "what is your last name ?"
read lname
echo "Hello... $name,whts is your age"
read age
echo "enter your phone number"
read phone
echo "enter your street"
read street
echo "enter your city"
read city
echo "enter pincode"
read pincode
echo "enter your file name you want to save your input"
read filename
echo -e  " name:$fname $lname,\n age $age,\n phone:$phone,\n  street :$street,\n city:$city,\n pincode:$pincode" > $filename
cat $filename
ls
