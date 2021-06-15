<?php
namespace test\MyGreeter;

/**
 * Description of MyGreeter_Client
 *
 * @author wang xiu
 */
class Client {
    //put your code here
    public function getGreeting() {
        $hour = date('H');
        if (6 <= $hour && $hour <= 12) {
            return 'Good morning';
        } elseif (12 < $hour && $hour <= 18) {
            return 'Good afternoon';
        } else {
            return 'Good evening';
        }
    }

}
