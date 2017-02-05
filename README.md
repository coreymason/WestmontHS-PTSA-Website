# Westmont PTSA Website

## Synopsis:

### Current Version: No longer In Use

This repository hosts the old Westmont High School PTSA website and can now be viewed at http://www.coreysmason.com/ptsa. This project utilizes Bower to maintain packages and Grunt as a taskrunner; both ruby and Node.js are required for development.

## Contributors

### Setup
1. Install Ruby and Node.js
2. Navigate to this project's directory
3. Execute these commands...
  * ```npm install -g bower```
  * ```npm install -g grunt-cli```
  * ```bundle install``` or ```gem install compass```
  * ```bower install```
  * ```npm install```
6. XAMPP is recommended for local testing
  * Please note that the ```grunt``` command will have to be executed at least once before this project will be correctly displayed in the browser.

### Developing
* ```grunt```: Initiates livereload on port 35729, (re)compiles sass (with compass and autoprefixer) as well as coffeescript and watches for changes upon which a reload is triggered.
* ```bumpto:(major/minor/patch)```: Updates the version number in all relevant files.

### Deploying
* ```.ftppass``` is required for direct deployment

## License

This theme and all of its components are licensed under the GPLv3 license.

## Author

### Corey Mason - http://www.coreysmason.com
