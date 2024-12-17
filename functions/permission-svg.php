<?php 
// Permitir upload de SVG no WordPress
function permitir_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/svg+xml';
    $mimes['jpg'] = 'image/svg+xml';
    $mimes['png'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'permitir_svg_upload');

// Sanitizar conteúdo SVG
function sanitizar_svg($file) {
    if ($file['type'] == 'image/svg+xml') {
        $file['ext'] = 'svg';
        $file['type'] = 'image/svg+xml';
    }
    return $file;
}

add_filter('wp_check_filetype_and_ext', 'sanitizar_svg', 10, 4);

// Permitir pré-visualização de SVGs
function exibir_svg_miniatura($response, $attachment, $meta) {
    if ($response['type'] == 'image' && $response['subtype'] == 'svg+xml' && class_exists('SimpleXMLElement')) {
        try {
            $path = get_attached_file($attachment->ID);
            $svg = new SimpleXMLElement(@file_get_contents($path));
            if ($svg !== false) {
                $src = 'data:image/svg+xml;base64,' . base64_encode(file_get_contents($path));
                $response['image'] = compact('src');
                $response['thumb'] = compact('src');
            }
        } catch (Exception $e) {
            // Erro ao ler o SVG
        }
    }
    return $response;
}
add_filter('wp_prepare_attachment_for_js', 'exibir_svg_miniatura', 10, 3);


function allow_webp_upload($mimes) {
    $mimes['webp'] = 'image/webp'; 
    return $mimes;
}
add_filter('upload_mimes', 'allow_webp_upload');