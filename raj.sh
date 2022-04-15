echo "enter user name"
read uname
if [ $uname = "raj" ]
then
echo "passwd"
read passwd
if [ $passwd = "123" ]
then
echo "hello $uname"
else 
echo "wrong passwd"
fi
else
echo "wrong user name"
fi

