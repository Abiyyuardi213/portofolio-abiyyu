<?
class PageController {
    public function handleRequestPage($fitur) {
        switch($fitur) {
            case 'homepage':
                include './resources/views/frontPage.php';
                break;

            case 'rewrite-page':
                include './resources/views/rewrite-page.php';
                break;
        }
    }
}