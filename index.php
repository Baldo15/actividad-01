<?php 
    class A {
        private $foo;
        private $bar;
        private $lorem;
        public function getFoo() {
            return $this->foo;
        }

        public function setFoo($foo) {
            $this->foo = $foo;
        }

        public function getBar() {
            return $this->bar;
        }

        public function setBar($bar) {
            $this->bar = $bar;
        }
    }
    class b {
        private $foo;
        private $bar;

        public function getFoo() {
            return $this->foo;
        }

        public function setFoo($foo) {
            $this->foo = $foo;
        }

        public function getBar() {
            return $this->bar;
        }

        public function setBar($bar) {
            $this->bar = $bar;
        }
    }

class C {
    private $foo;
    private $bar;

    public function getFoo() {
        return $this->foo;
    }

    public function setFoo($foo) {
        $this->foo = $foo;
    }

    public function getBar() {
        return $this->bar;
    }

    public function setBar($bar) {
        $this->bar = $bar;
    }
}
