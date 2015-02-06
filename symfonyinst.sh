##########################################################################
#### Script to copy install process explained in codio Symfony Tutorial at
####   https://codio.com/s/docs/specifics/symfony/
##########################################################################
 
#### Instructions
 
#### Option 1.
#### From the Codio Dashboard, create a new project and select the Git Tab
#### and then paste the following URL into the box
####          https://gist.github.com/45bdb8c27dafe4e96566.git
#### Give your project a name and click Create.
 
#### Option 2. 
#### From the Codio Dashboard, create a new Empty template project.
#### Open a Terminal window from the Tools->Terminal window
#### Copy the contents of this file to a file called 'symfonyinst.sh' in the root of your machines file system
 
 
#### Then
 
#### Find the Version number of the latest Symfony by looking at the website at - 
####       http://symfony.com/download 
#### At the time of writing, it is 2.5.5
#### If needed, edit the variable on the next line to show the latest version number
 
SYMF_VER="2.6.4"


 
#### Then run the script in the terminal window by typing
 
####       bash symfonyinst.sh 
 
#### End of Instructions
##########################################################################
 
echo
echo "     START OF AUTOMATED INSTALL"
echo
 
# sets the hostname variables
CODIO_HOST=`cat /etc/hostname`  
WORKSPACE="$HOME/workspace"
 
# set colour output = echo -e '\E[1;33;44m' 
# remove colour = ; tput sgr0
# See http://www.tldp.org/LDP/abs/html/colorizing.html for colour codes
 
echo -e '\E[1;33;44m' "Download from the Symfony site, decompress and auto delete original download"; tput sgr0
wget http://symfony.com/download?v=Symfony_Standard_Vendors_$SYMF_VER.tgz -O - | tar --strip-components=1 -zxf - Symfony/ -C $WORKSPACE 
 
 

 
echo -e '\E[1;33;44m' "Editing the config file"; tput sgr0
sed -i '3,13d' $WORKSPACE/web/config.php
sed -i '10,18d' $WORKSPACE/web/app_dev.php
 

 
 
