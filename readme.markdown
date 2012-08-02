# Default Project Layout for Joomla! 2.5

## System setup
Make sure the follow are installed for Capistrano deployment:

* capistrano
* capistrano-ext for multistage


## How to get started
1. create a fork of the repository, or use it as an remote repo
1. clone to your local computer
1. run `git submodules initialize --update` to setup your repository
1. begin editing the template and any other needed components
1. update config/deploy.rb and config/deploy/staging.rb, adding your server account info etc
1. add your public ssh key to your server and a public ssh key from you server to GitHub

## Responsive Notes
The template is setup to have a lot of responsive features built into its css. If you are not working with responsive features, simply add new code to the appropriate scss file. If you are using responsive you will want to add base styles that are appropriate for all devices in xxx.scss, for styles appropriate to widths of 320+, add to xxx-320.scss and so on. You will then need to add @imports into all the template/template-ie scss files.

Index.php includes template.scss for all devices except IE7/8, which uses template-ie.scss.

## How to deploy
1. create a database to be used for Joomla on your server
1. from the command cd into your project directory
1. type `cap deploy:setup` to setup the server and install Joomla
1. type `cap deploy` to pull the latest version of your project from GitHub  to your server


## Todo/known problems
1. handle the migration/setup of the database between servers
1. improve template defaults

## Rules/tips
- don't add margin/padding to modules, use span* if needed