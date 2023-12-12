import axios from 'axios';

const larkAppId = 'cli_a5e588cb9038d010';
const larkAppSecret = 'RLQbDf5i6I8C8tIHE4fAtXTwYH0DegkG';
const url = 'https://open.larksuite.com/open-apis/auth/v3/tenant_access_token/internal';

// Function to get Lark Access Token
async function getLarkAccessToken() {
    const data = {
        app_id: larkAppId,
        app_secret: larkAppSecret,};

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
    })
}
// getLarkAccessToken();

// Function to get data from Lark
async function getLarkData(accessToken) {
  try {
    // Replace this URL with the actual API endpoint for fetching data
    const apiUrl = 'https://open.feishu.cn/open-apis/contact/v1/scope/get';

    const response = await axios.get(apiUrl, {
      headers: {
        Authorization: `Bearer ${accessToken}`,
        'Content-Type': 'application/json',
      },
    });

    const larkData = response.data;
    console.log('Lark Data:', larkData);
    return larkData;
  } catch (error) {
    console.error('Error getting Lark data:', error.message);
    throw error;
  }
}

// Function to process Lark data and extract phone numbers and employees
function processLarkData(larkData) {
  const phoneNumbers = [];
  const employees = [];

  // Assuming larkData contains an array of contacts
  if (larkData.data && Array.isArray(larkData.data.contacts)) {
    larkData.data.contacts.forEach((contact) => {
      if (contact.phone) {
        phoneNumbers.push(contact.phone);
      }
      if (contact.employee) {
        employees.push(contact.employee);
      }
    });
  }

  console.log('Phone Numbers:', phoneNumbers);
  console.log('Employees:', employees);

  return { phoneNumbers, employees };
}

// Main function to orchestrate the process
async function processLarkDataAndSendToAPI() {
  try {
    const accessToken = await getLarkAccessToken();
    const larkData = await getLarkData(accessToken);

    const { phoneNumbers, employees } = processLarkData(larkData);

    // Now you can send phoneNumbers and employees to another API or perform other actions
    // ...

  } catch (error) {
    console.error('Error processing data:', error.message);
  }
}

// Call the main function to start the process
processLarkDataAndSendToAPI();