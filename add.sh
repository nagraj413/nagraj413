echo "enter tel sub marks:"

read t 
echo "enter hind sub marks:"

read h
echo "Enter sci sub marks:"

read sc
echo "enter soc sub marks:"

read soc
echo "Enter eng sub marks"

read 
echo "enter math sub marks"

read m
sum=`expr $t + $h + $sc + $soc + $m`

echo "Sum = $sum"

per= `expr $sum \% 5`
 
echo "percentage is $perc"
