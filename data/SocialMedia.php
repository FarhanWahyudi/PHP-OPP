<?php
    class SocialMedia {
        public string $name;
    }

    final class Facebook extends SocialMedia {

    }

    // Error
    // class FakeFacebook extends Facebook {

    // }

    class Instagram extends SocialMedia {
        final function login(): bool {
            return false;
        }
    }

    class FakeInstagram extends Instagram {
        // Error
        // function login(): bool {
        //     return false;
        // }
    }
?>