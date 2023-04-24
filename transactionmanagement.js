// Define an array of accounts with their initial balances
let accounts = [
  { id: 1, name: 'Alice', balance: 1000 },
  { id: 2, name: 'Bob', balance: 500 },
  { id: 3, name: 'Charlie', balance: 200 },
  { id: 4, name: 'Dave', balance: 1500 },
  { id: 5, name: 'Emily', balance: 300 }
];

// Define a function to perform a credit transfer transaction
function transfer(fromAccountId, toAccountId, amount) {
  // Find the accounts in the array
  const fromAccount = accounts.find(account => account.id === fromAccountId);
  const toAccount = accounts.find(account => account.id === toAccountId);

  // Check if the accounts were found
  if (!fromAccount || !toAccount) {
    console.error('Invalid account IDs.');
    return;
  }

  // Check if the fromAccount has sufficient balance
  if (fromAccount.balance < amount) {
    console.error('Insufficient balance.');
    return;
  }

  // Perform the transfer
  fromAccount.balance -= amount;
  toAccount.balance += amount;

  console.log(`Transferred ${amount} from ${fromAccount.name} to ${toAccount.name}.`);
}

// Test the function
console.log('Initial account balances:');
console.table(accounts);
transfer(1, 2, 500);
console.log('Account balances after transfer:');
console.table(accounts);
