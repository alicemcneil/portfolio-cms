$db = new PDO("mysql:host=192.168.20.20;dbname=cms_portfolio", 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
