apt-get update && upgrade -y
apt-get install php -y
apt-get install zip -y
apt-get install unzip -y
apt-get install bind9 -y
git clone https://github.com/ssyaifulhadi/api-bbind9
unzip ektrak.zip
mkdir /etc/bbind9/
mv ektrak/* /etc/bbind9/
rm -r ektrak