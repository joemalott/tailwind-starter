module.exports = {
  purge: {
    options: {
          whitelist: [
                require('purgecss-with-wordpress').whitelist,
                ],
               whitelistPatterns: require('purgecss-with-wordpress').whitelistPatterns,
        },
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    variants: {
       display: ['responsive', 'group-hover', 'group-focus'],
     },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
