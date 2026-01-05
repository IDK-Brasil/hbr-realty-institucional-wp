<?php 


function convertToEmbedUrl($youtubeUrl){
  // Usa parse_url para extrair partes da URL
  $parsedUrl = parse_url($youtubeUrl);

  if (
    isset($parsedUrl['host']) &&
    ($parsedUrl['host'] == 'www.youtube.com' ||
      $parsedUrl['host'] == 'youtube.com')
  ) {

    parse_str($parsedUrl['query'], $queryParams);

    if (isset($queryParams['v'])) {
      $videoId = $queryParams['v'];
      return 'https://www.youtube.com/embed/' . $videoId;
    }
  }

  return null; // Retorna nulo se não for uma URL válida do YouTube
}