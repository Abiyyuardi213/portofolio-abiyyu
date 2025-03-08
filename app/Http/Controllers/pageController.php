<?
class PageController {
    public function handleRequestPage($fitur) {
        switch($fitur) {
            case 'homepage':
                include './resources/views/frontPage.php';
                break;
        }
    }
}