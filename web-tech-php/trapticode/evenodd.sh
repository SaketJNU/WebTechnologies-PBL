echo "enter any number:"
read n
echo -n "Result: "
if [ `expr $n % 2` == 0 ]
then
	echo "$n is even"
else
	echo "$n is odd"
fi

