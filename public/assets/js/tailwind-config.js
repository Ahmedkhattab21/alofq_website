tailwind.config = {
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                surface: '#fcf8f8',
                tertiary: '#514c4b',
                'surface-tint': '#5e5e5e',
                'surface-dim': '#ddd9d8',
                'on-tertiary-fixed-variant': '#4a4645',
                'on-error-container': '#93000a',
                'on-background': '#1c1b1b',
                'surface-container-low': '#f7f3f2',
                'primary-fixed': '#e4e2e2',
                'on-tertiary': '#ffffff',
                'tertiary-fixed': '#e9e1df',
                error: '#ba1a1a',
                'primary-fixed-dim': '#c7c6c6',
                'tertiary-container': '#696463',
                'surface-variant': '#e5e2e1',
                'on-secondary-container': '#fffbff',
                'on-primary-fixed-variant': '#464747',
                'on-tertiary-fixed': '#1e1b1a',
                'inverse-surface': '#313030',
                'on-error': '#ffffff',
                secondary: '#bc0007',
                'secondary-fixed-dim': '#ffb4a9',
                'secondary-fixed': '#ffdad5',
                'surface-bright': '#fcf8f8',
                'on-secondary-fixed': '#410001',
                'tertiary-fixed-dim': '#ccc5c3',
                outline: '#747878',
                'surface-container-high': '#ebe7e7',
                'outline-variant': '#c4c7c7',
                background: '#ffffff',
                'on-surface': '#1c1b1b',
                'on-primary': '#ffffff',
                'on-tertiary-container': '#e9e2e0',
                'inverse-on-surface': '#f4f0ef',
                'surface-container-highest': '#e5e2e1',
                'secondary-container': '#e3231c',
                'primary-container': '#656565',
                'on-primary-container': '#e4e3e3',
                'surface-container': '#f1edec',
                'error-container': '#ffdad6',
                'on-primary-fixed': '#1b1c1c',
                'inverse-primary': '#c7c6c6',
                'surface-container-lowest': '#ffffff',
                'on-surface-variant': '#444748',
                'on-secondary-fixed-variant': '#930004',
                'on-secondary': '#ffffff',
                primary: '#4d4d4d'
            },
            borderRadius: {
                DEFAULT: '0.5rem',
                lg: '0.5rem',
                xl: '0.75rem',
                full: '9999px'
            },
            spacing: {
                'margin-desktop': '64px',
                gutter: '24px',
                'container-max': '1440px',
                unit: '8px',
                'stack-section': '80px',
                'margin-mobile': '20px'
            },
            fontFamily: {
                'headline-lg': ['IBM Plex Sans Arabic'],
                'headline-lg-mobile': ['IBM Plex Sans Arabic'],
                'body-md': ['IBM Plex Sans Arabic'],
                'title-md': ['IBM Plex Sans Arabic'],
                'label-sm': ['IBM Plex Sans Arabic'],
                'body-lg': ['IBM Plex Sans Arabic'],
                'display-lg': ['IBM Plex Sans Arabic']
            },
            fontSize: {
                'headline-lg': ['32px', { lineHeight: '40px', fontWeight: '600' }],
                'headline-lg-mobile': ['24px', { lineHeight: '32px', fontWeight: '600' }],
                'body-md': ['16px', { lineHeight: '24px', fontWeight: '400' }],
                'title-md': ['20px', { lineHeight: '28px', fontWeight: '500' }],
                'label-sm': ['13px', { lineHeight: '16px', letterSpacing: '0.02em', fontWeight: '500' }],
                'body-lg': ['18px', { lineHeight: '28px', fontWeight: '400' }],
                'display-lg': ['48px', { lineHeight: '60px', letterSpacing: '0', fontWeight: '700' }]
            }
        }
    }
};
