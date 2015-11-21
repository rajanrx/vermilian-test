#Vermilian-test
Test for UltraData

#Installtion procedure
1. Go to dir `app` on the terminal
2. Execute `composer install` (@see https://getcomposer.org/ for composer installation) on the terminal
3. Import `app/data/db/setup_v1.sql` to setup a db without data or `app/data/db/migration.sql` to install db and some sample data
4. Make app/web as a DOCUMENT ROOT or browse to http://[WORKING_DIR/DOMAIN]/app/web to see the results
 
#Version 1.0
 1. Implemented a simple comment Create and View operations in one page app
    - Uses Yii framework
    - Uses jQuery validation library for form validation
    - Uses Bootstrap CSS framework
 
#Future enhancements
 1. Handle error properly in javascript
 2. Add pagination or `show more` button to show more comments. Currently the limit is set to `recent 10 comments`
 3. Use better styling in the markup
 4. Customize as a module rather than a controller action so that it can be plugged in wherever required ( needs db and business logic changes )
 
