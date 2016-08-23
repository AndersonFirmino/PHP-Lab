<?php
// shell_exec(str $cmd); Executa um comando no shell do OS

$x = shell_exec("python -m timeit -n 1 'for i in xrange(10): pass'");

echo "\n\n";
echo "Valor recebido foi $x";
echo "\n\n";
