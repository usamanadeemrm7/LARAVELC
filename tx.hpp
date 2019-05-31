
#ifndef TRANSACTION_H
#define TRANSACTION_H

#include <iostream>
#include <string>
#include <vector>
#include <memory>
#include <stdexcept>

#include "json.hh"
using json = nlohmann::json;

class Transaction {
	public:
		Transaction(string txhash, string chash, string vhash);

		string gettxhash(void);
		string getchash(void);
		string getvhash(void);
		
		void totxString(void);
	json toJSON(void);
private:
	string txhash;
	string chash;
	string vhash;
	
	// string getMerkleRoot(const vector<string> &merkle);
};
// Constructor 
Transaction::Transaction(string txhash, string chash, string vhash) {
	printf("\nInitializing Transaction: %d ---- Hash: %s \n", txhash.c_str());
	this->txhash = txhash;
	this->chash = chash;
	this->vhash = vhash;
	
}

string Transaction::gettxhash(void) {
	return this->txhash;
}

string Transaction::getchash(void) {
	return this->chash;
}

string Transaction::getvhash(void) {
	return this->vhash;
}



// Prints Tx data 
void Transaction::totxString(void) {
	string txdataString;
	for (int i = 0; i < txhash.size(); i++)
		txdataString += txhash[i] + ", ";
	printf("\n-------------------------------\n");
	printf("Transaction Hash: %s\nC Hash: %s\nV Hash: %s",
		txhash, this->txhash.c_str(), this->chash.c_str(), vhash.c_str());
	printf("\n-------------------------------\n");
}

json Transaction::toJSON(void) {
	json j;
	j["txhash"] = this->txhash;
	j["chash"] = this->chash;
	j["vhash"] = this->vhash;

	return j;
}


std::string random_string()
{
	std::string str("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz");

	std::random_device rd;
	std::mt19937 generator(rd());

	std::shuffle(str.begin(), str.end(), generator);

	return str.substr(0, 32);    // assumes 32 < number of characters in str         
}

#endif
