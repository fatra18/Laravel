module.exports = {
  purge: [
    './*.html'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      spacing: {
        '1': '8px',
        '2': '12px',
        '3': '16px',
        '4': '24px',
        '5': '32px',
        '6': '48px', 
      },
      width: {

        '1/7': '14.2857143%',

        '2/7': '28.5714286%',

        '3/7': '42.8571429%',

        '4/7': '57.1428571%',

        '5/7': '65.4285714%',
        
        '1/5' : '75.4285714%',
        
        '2/5' : '65.6524312%',
        
        
        '4/6': '61.039937%',

        '5/7': '84.2109830%',
        
        '6/7': '85.7142857%',
        
        '10/10': '99.7142857%',

      },
      fontWeight: {

        hairline: 100,
 
        'extra-light': 100,
 
        thin: 200,
         light: 300,
         normal: 400,
         medium: 500,
 
        semibold: 600,
         bold: 700,
 
        extrabold: 800,
 
        'extra-bold': 800,
         black: 900,
       },
       lineHeight: {

        'extra-loose': '2.5',

        '12': '3rem',
        'leading-11' :	'line-height: 4rem',
       
       },
       spacing: {

        '200': '12,5rem',

        '84': '21rem',

        '96': '24rem',

      },

      screens: {
        
        // => @media (min-width: 640px) { ... }
  
        'iphone' : '400px',
        
  
        
      },
      margin: {

        'ml-66': '-17rem',
       }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
