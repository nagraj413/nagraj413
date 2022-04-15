echo "enter first number"
read a
echo "enter 2nd number"
read b
if [ $a -gt $b ]
then
echo "a is greater then b"
elif [ $a -eq $b ]
then
echo "a is equal to b"
else 
echo "b is greater than a"
fi
