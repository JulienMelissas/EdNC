# Require any additional compass plugins here.
add_import_path "assets/src/bower_components/foundation/scss"

# Set this to the root of your project when deployed:
http_path = "/"
sass_dir = "assets/app/sass"
css_dir = "assets/public/css"
images_dir = "assets/public/imgs"
javascripts_dir = "assets/public/js"
fonts_dir = "assets/public/fonts"

# You can select your preferred output style here (can be overridden via the command line):
output_style = :compressed #:expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass