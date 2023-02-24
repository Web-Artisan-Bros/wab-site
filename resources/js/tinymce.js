import 'tinymce/tinymce.min'
import 'tinymce/plugins/image'
import 'tinymce/plugins/link'
import 'tinymce/plugins/media'
import 'tinymce/themes/silver'
import 'tinymce/models/dom'
import 'tinymce/icons/default'

window.tinymce = tinymce

export const tinymceConfig = {
  selector: 'textarea.tinymce',
  skin_url: '/skins/ui/oxide/',
  content_css: '/skins/content/default/content.min.css',
  statusbar: false,
  promotion: false,
  plugins: 'link',
  toolbar: 'link',
  image_advtab: true,
  image_title: true
  // image_uploadtab: true,
  // images_file_types: 'jpg,jpeg,png,gif,webp',
}

export function init (config) {
  window.tinymce.init({
    ...tinymceConfig, ...config
  })
}
