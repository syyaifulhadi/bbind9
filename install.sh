apt-get update && upgrade -y
apt-get install php -y
apt-get install zip -y
apt-get install unzip -y
apt-get install bind9 -y
git clone https://github.com/syyaifulhadi/api-bbind9
unzip api-bbind9/ektrak.zip
mkdir /etc/bbind9/
mv api-bbind9/* /etc/bbind9/
rm -r apo-bbind9
