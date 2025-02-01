function name(string $url, string $ext = '', string $pre = '', string $fun = 'md5'): string

{

  [$hah, $ext] = [$fun($url), trim($ext ?: pathinfo($url, 4), '.\\/')];

  $attr = [trim($pre, '.\\/'), substr($hah, 0, 2), substr($hah, 2, 30)];

  return trim(join('/', $attr), '/') . '.' . strtolower($ext ?: 'tmp');

}

 

$url = "https://raw.githubusercontent.com/saramoradi001/sara/refs/heads/main/1.php";

 

echo '/upload/'.name($url, '', 'down/');