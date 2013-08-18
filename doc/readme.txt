1) Database structure
 
  Tabels:
	jtab.images - images (general storage)
	jtab.main - main information about tablets
	jtab.main.adk - android versions matrix
	jtab.main.conf - main informations configuration (stores configuration about stored information - what kind of information were stored)
	jtab.main.ntwrk - mobile networks matrix
   
	jtab.users - used to login system

2) Framework - JQuery with:

	jFormer http://www.jformer.com/download/
	FineUploader http://fineuploader.com/
	Excolo Slider http://excolo.github.io/Excolo-Slider/
  
3) Directory structure

├── css
│   ├── main.css
│   └── normalize.css
├── doc
├── js
│   ├── main.js
│   ├── plugins.js
│   └── vendor
│       ├── jquery.min.js
│       └── modernizr.min.js
├── sql
│   ├── @work (to delete after development)
├── .htaccess
├── 404.html
├── index.html
├── humans.txt
├── robots.txt
├── crossdomain.xml
├── favicon.ico


	doc - directory with documentation (readme and etc)
	sql - database settings
	 @work - csv and xls files (original)
  
4) TODO:

Database PHP connect procedures

