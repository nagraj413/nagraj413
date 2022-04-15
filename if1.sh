echo "enter first number"
read a
echo "enter second number"
read b
if [ $a -lt $b ]
then 
echo "a is less b"
elif [ $a = $b ]
then 
echo "a is equal to b"
else
echo "a is greater then b"
fi
