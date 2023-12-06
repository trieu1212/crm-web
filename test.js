import axios from 'axios';

const appId = 'cli_a5e588cb9038d010';
const appSecret = 'RLQbDf5i6I8C8tIHE4fAtXTwYH0DegkG';
const url = 'https://open.larksuite.com/open-apis/auth/v3/tenant_access_token/internal';

const data = {
    app_id: appId,
    app_secret: appSecret,
};

axios.post(url, data)
    .then(response => {
        const result = response.data;
        if (result.code === 0) {
            const tenantAccessToken = result.tenant_access_token;
            console.log(`Tenant Access Token: ${tenantAccessToken}`);
        } else {
            console.error(`Error: ${result.msg}`);
        }
    })
    .catch(error => {
        console.error(`Error: ${error.message}`);
    });
