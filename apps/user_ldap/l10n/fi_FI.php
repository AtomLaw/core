<?php $TRANSLATIONS = array(
"Host" => "Isäntä",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Voit jättää protokollan määrittämättä, paitsi kun vaadit SSL:ää. Aloita silloin ldaps://",
"Base DN" => "Oletus DN",
"You can specify Base DN for users and groups in the Advanced tab" => "Voit määrittää käyttäjien ja ryhmien oletus DN:n (distinguished name) 'tarkemmat asetukset'-välilehdeltä  ",
"User DN" => "Käyttäjän DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "Asiakasohjelman DN, jolla yhdistäminen tehdään, ts. uid=agent,dc=example,dc=com. Mahdollistaaksesi anonyymin yhteyden, jätä DN ja salasana tyhjäksi.",
"Password" => "Salasana",
"For anonymous access, leave DN and Password empty." => "Jos haluat mahdollistaa anonyymin pääsyn, jätä DN ja Salasana tyhjäksi ",
"User Login Filter" => "Login suodatus",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Määrittelee käytettävän suodattimen, kun sisäänkirjautumista yritetään. %%uid korvaa sisäänkirjautumisessa käyttäjätunnuksen.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "käytä %%uid paikanvaraajaa, ts. \"uid=%%uid\"",
"User List Filter" => "Käyttäjien suodatus",
"Defines the filter to apply, when retrieving users." => "Määrittelee käytettävän suodattimen, kun käyttäjiä haetaan.  ",
"without any placeholder, e.g. \"objectClass=person\"." => "ilman paikanvaraustermiä, ts. \"objectClass=person\".",
"Group Filter" => "Ryhmien suodatus",
"Defines the filter to apply, when retrieving groups." => "Määrittelee käytettävän suodattimen, kun ryhmiä haetaan.  ",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "ilman paikanvaraustermiä, ts. \"objectClass=posixGroup\".",
"Port" => "Portti",
"Base User Tree" => "Oletuskäyttäjäpuu",
"Base Group Tree" => "Ryhmien juuri",
"Group-Member association" => "Ryhmä-jäsen assosiaatio (yhteys)",
"Use TLS" => "Käytä TLS:ää",
"Do not use it for SSL connections, it will fail." => "Älä käytä SSL-yhteyttä varten, se epäonnistuu. ",
"Case insensitve LDAP server (Windows)" => "Kirjainkoosta piittamaton LDAP-palvelin (Windows)",
"Turn off SSL certificate validation." => "Poista käytöstä SSL-varmenteen vahvistus",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "Jos yhteys toimii vain tällä valinnalla, siirrä LDAP-palvelimen SSL-varmenne ownCloud-palvelimellesi.",
"Not recommended, use for testing only." => "Ei suositella, käytä vain testausta varten.",
"User Display Name Field" => "Käyttäjän näytettävän nimen kenttä",
"The LDAP attribute to use to generate the user`s ownCloud name." => "LDAP attribuutti, jota käytetään käyttäjän ownCloud käyttäjänimenä ",
"Group Display Name Field" => "Ryhmän \"näytettävä nimi\"-kenttä",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "LDAP atribuutti, jota käytetään luomaan ryhmän ownCloud nimi",
"in bytes" => "tavuissa",
"in seconds. A change empties the cache." => "sekunneissa. Muutos tyhjentää välimuistin.",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Jätä tyhjäksi käyttäjänimi (oletusasetus). Muutoin anna LDAP/AD atribuutti.",
"Help" => "Ohje"
);
