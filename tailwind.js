module.exports = {
    mode: 'jit',
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: {
        content: [
            './*.php',
            './templates/**/*.php',
            './build/js/**/*.js',
        ],
        options: {
            safelist: [],
            blocklist: [],
            keyframes: true,
            fontFace: true,
        },
    },
    theme: {
        container: {
            center: true,
            padding: '1.5rem',
        },
        extend: {
            colors: {
                link: {
                    DEFAULT: '#3182ce',
                    'hover': '#63b3ed',
                },
                yellow: '#F9BE4F',
                pink: '#F9575C',
                paleYellow: '#FBF4DE',
                maroon: '#675444',
                grayWhite: '#f4f4f4',
                gray: '#d1d5db',
                white: '#ffffff',
                blackText: '#808080',
                grayBlack: '#2e2e2e',
                pinkInstagram: '#f3437f',
                blackrgba:'rgba(0,0,0,60%)',
            },
            fontSize: {
                xxs: '0.675rem',
            },
            lineHeight: {
                tighter: '1.125',
            },
            backgroundImage: {
                'bgsubscribe': "url(https://www.naturalezacuriosa.com/wp-content/uploads/2021/06/seguros-perros-y-gatos.jpg)",
            },
        }
    },
    variants: {
        textColor: ['responsive', 'hover', 'focus', 'visited'],
    },
    plugins: [
        ({addUtilities}) => {
            const utils = {
                '.translate-x-half': {
                    transform: 'translateX(50%)',
                },
            };
            addUtilities(utils, ['responsive'])
        }
    ]
};
