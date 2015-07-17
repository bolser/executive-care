# pimcore-skeleton
A skeleton Pimcore application with a Vagrant box

Based on:

Version: 3.0.6

Release Date: May 29, 2015

Future releases may make breaking changes to the DB structure so the provided SQL file may not work forever.

## Installation Instructions

Clone this repository into `~/Sites`

Download the latest Stable release package from https://www.pimcore.org/en/resources/download

Extract the `/website/var` directory from the release package into `~/Sites/pimcore-skeleton/var`

Extract the `/pimcore` directory from the release package into `~/Sites/pimcore-skeleton/pimcore`

Create the file `~/Sites/pimcore-skeleton/var/config/system.xml` with the content

```
<?xml version="1.0"?>
<zend-config xmlns:zf="http://framework.zend.com/xml/zend-config-xml/1.0/">
  <general>
    <timezone>Europe/Berlin</timezone>
    <language>en</language>
    <validLanguages>en</validLanguages>
    <debug>1</debug>
    <debugloglevel>debug</debugloglevel>
    <custom_php_logfile>1</custom_php_logfile>
  </general>
  <database>
    <adapter>Mysqli</adapter>
    <params>
      <username>root</username>
      <password>123</password>
      <dbname>pimcore</dbname>
      <host>localhost</host>
      <port>3306</port>
    </params>
  </database>
  <documents>
    <versions>
      <steps>10</steps>
    </versions>
    <default_controller>default</default_controller>
    <default_action>default</default_action>
    <error_pages>
      <default>/</default>
    </error_pages>
    <createredirectwhenmoved/>
    <allowtrailingslash>no</allowtrailingslash>
    <allowcapitals>no</allowcapitals>
    <generatepreview>1</generatepreview>
  </documents>
  <objects>
    <versions>
      <steps>10</steps>
    </versions>
  </objects>
  <assets>
    <versions>
      <steps>10</steps>
    </versions>
  </assets>
  <services/>
  <cache>
    <excludeCookie/>
  </cache>
  <httpclient>
    <adapter>Zend_Http_Client_Adapter_Socket</adapter>
  </httpclient>
</zend-config>

```

Add a record to your host file

```
192.168.56.22   pimcore.dev
```

cd into ~/Sites/pimcore-skeleton and run
```
vagrant up
```

The admin panel can be accessed at http://pimcore.dev/admin

```
Username - admin
password - pimcore
```

The /var folder is an unfortunate side of Pimcore, it gets too big to be committed into source control but is required for the configuration. If using this skeleton application to create a local copy of an already existing Pimcore application you will need to get a copy of the /var folder and a copy of the database from the existing installation.
