#Php-Github
Php-GitHub is a library wrapping the github v2 api written for versions of php >= 5.3

**Note: Currently only the read only api requests are supported**

##Usage

All functions return a stdClass object directly from json decode so to see the return format `var_dump` or check the [api docs](http://develop.github.com/) 

###Repos
Search
	
	$search = GitHub\Repos::search('php-github');
Show
	
	$return = GitHub\Repos::show('jetviper21', 'plow');
Show All

	$return = GitHub\Repos::show_all('jetviper21');
Network

	$return = GitHub\Repos::network('jetviper21', 'plow');
Refs

	$return = GitHub\Repos::refs('rails', 'rails');
Branches

	$return = GitHub\Repos::branches('rails', 'rails');
	
###Users
Show

		$return = GitHub\Users::show('jetviper21');

Flollowers

		$return = GitHub\Users::followers('jetviper21');

Following

		$return = GitHub\Users::following('jetviper21');

Watching

		$return = GitHub\Users::watching('jetviper21');
###Objects
Tree

	$return = GitHub\Objects::tree('defunkt', 'facebox', 'a47803c9ba26213ff194f042ab686a7749b17476');
Blob

	$return = GitHub\Objects::blob('defunkt', 'facebox', '365b84e0fd92c47ecdada91da47f2d67500b8e31', 'README.txt');
Raw

	$return = GitHub\Objects::raw('defunkt', 'facebox', 'd4fc2d5e810d9b4bc1ce67702603080e3086a4ed');

###Commits
Repository

	$return = GitHub\Commits::repository('plow', 'jetviper21', 'master');
File

	$return = GitHub\Commits::file('plow', 'jetviper21', 'master', 'lib/plow.php');
Commit

	$return = GitHub\Commits::commit('plow', 'jetviper21', 'eb82a10506b5e6817b7d4ac2913b1d801fd52be9');

###Issues
Search

	$return = GitHub\Issues::search('rails', 'rails', GitHub\Issues::CLOSED, 'record');

Get All issues for repo

	$return = GitHub\Issues::get('rails', 'rails', GitHub\Issues::CLOSED);

View an issue

	$return = GitHub\Issues::view('jetviper21', 'nimblize', '7');


##Dependencies

**php-curl**