<?php
class ClaseBase
{
    public function test()
    {
        echo "ClaseBase::test() llamada\n";
    }
    //final, al poner eso no puedes hereder esta clase
    final public function masTests()
    {
        echo "ClaseBase::masTests() llamada\n";
    }
}
class ClaseHijo extends ClaseBase
{
    public function masTests()
    {
        echo "ClaseHijo::masTests() llamada\n";
    }
}