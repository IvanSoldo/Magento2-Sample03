# Sample 03 - Magento's ORM

* Setup scripts
* Model / Resource / Collection

## Todo
* Examine Magento's `setup_module` table
* UpdateSchema - add created_at, updated_at and content columns
* Create sample03/news/list controller (and List block and template) and display last 10 news on it in descending order
* Create sample03/news/view/ controller (and View block and template) and display requested news on it
  (ex. /sample03/news/view/id/5 displays news with id=5)
* Create schema and model/resource/collection for news comments. Comment table needs to have foreign key to news table.
* Examine/trace model/resource/collection abstracts, find where db queries are executed

## Additional resources:
* <http://inchoo.net/magento-2/setup-scripts-magento-2/>
* <https://framework.zend.com/manual/1.12/en/zend.db.select.html>
