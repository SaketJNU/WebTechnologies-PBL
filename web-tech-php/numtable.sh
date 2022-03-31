echo -n "Enter number to print table"
read n
for(( i=1;i<=10;i++ ))
do
	c=$((n * i))
	echo "$n * $i is : $c"
done
