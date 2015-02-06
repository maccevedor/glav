echo -e '\E[1;33;44m' "Setting your local timezone - Done"; tput sgr0
echo date.timezone = UTC >> ~/.parts/etc/php5/php.ini

parts stop apache2
parts start apache2

rm symfonyconfig.sh