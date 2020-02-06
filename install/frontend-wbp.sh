cp -rf install/src/wbp/layouts resources/views/layouts

# remove package manager from root
rm -f package.json
rm -f yarn.lock
rm -rf node_modules

# remove mix
rm -f webpack.mix.js

# remove assets
rm -rf resources/js
rm -rf resources/sass