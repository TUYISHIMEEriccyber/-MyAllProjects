#include<ctime>
#include<iostream>
#include<fstream>
#include<cstring>
#include<cstdlib>
using namespace std;
void login();
void registration();
void forgot();
void order();
int main(){
	int x;
	cout<<"\t\t\t______________________________________________________________________\n\n\n";
	cout<<"\t\t\t                 Welcome to our  page                                 \n\n\n";
	cout<<"\t\t\t______________________    MENU    ______________________________________\n\n\n";
	cout<<"\t | press 1 to LOGIN                   |"<<endl;
	cout<<"\t | press 2 to REGISTER                |"<<endl;
	cout<<"\t | press 3 if you forgot password     |"<<endl;
	cout<<"\t | press 4 to EXIT                    |"<<endl;
	cout<<"                                         "<<endl;
	std::cout<<"please enter your choice: ";
	std::cin>>x;
	cout<<endl;
	switch(x){
		case 1:
			login();
		    break;
		case 2:
			registration();
			break;
		case 3:
			forgot();
			break;
		case 4:
			cout<<"\t\t\t   Thank You!! \n\n";
		default:
			system("cls");
			cout<<"\t\t\t  Please Select from the options given above  \n"<<endl;
			main();
}
	return 0;
} 
void login(){
	order(); 
}
void registration(){
	string ruserid,rpassword,rid,rpass;
	system("cls");
	cout<<"\t\t\t  please enter the usre name and password for registration: "<<endl;
	cout<<"\t\t\t Enter the username: ";
	cin>>ruserid;
	cout<<"\t\t\t Enter the password: ";
	cin>>rpassword;
	ofstream f1("record.txt",ios::app);
	f1<<"USERNAME"<<"                        "<<"PASSWORD"<<endl;
	f1<<"____________"<<"                "<<"__________________"<<endl;
	f1<<ruserid<<"                           "<<rpassword<<endl;
	system("cls");
	cout<<"\n Registration is successfull!! \n";
	main();
} 
void forgot(){
	int option;
	system("cls");
	cout<<"\t\t\t You forgot Password? No worries  \n\n\n"<<endl;
	cout<<"\t press 1 to search your ID by username\n"<<endl;
	cout<<"\n\tpress 2 to go back to thev main menu"<<endl;
	cout<<"\n\t\t\t Enter your choice:";
	cin>>option;
	switch(option){
		case 1:
		{
			int count=0;
			string suserid,sid,spass;
			cout<<"\n\t\t\t Enter the username which you remembered: ";
			cin>>suserid;
			ifstream f2("records.txt");
			while(f2>>sid>>spass){
				if(sid==suserid){
					count=1;
				}
			}
			f2.close();
			if(count==1){
				cout<<"\n\n Your Account is found! \n";
				cout<<"\n\n Your password is: "<<spass;
				main();
			}
			else{
				cout<<"\n\t sorry! Your account is not found! \n";
				main();
			}
			break;
		}
	case 2:
		main();
		}}
void order(){
	int choice;
	system("cls");
	cout<<"\t\t\t______________________________________________________________________\n\n\n";
	cout<<"\t\t\t                 Welcome to our  page                                 \n\n\n";
	cout<<"\t\t\t______________________    MENU    ______________________________________\n\n\n";
	cout<<"\t\t\t\n  |Enter 1 to login as customer                                       |"<<endl;
	cout<<"\t\t\t\n | Enter 2 to login an employer                                       |"<<endl;
	cout<<"\t\t\t\n |enter 3 to go back to main menu |"<<endl;
	cout<<"Please enter your choice: ";
	cin>>choice;
	switch(choice){
		case 1:
			string names,userName,product;
			int quantity,price;
			int count;
	string userid,password,id,pass;
	system("cls");
			cout<<"\t\t\t  please enter the usre name and password for logging in: "<<endl;
	cout<<"\t\t\t USERNAME ";
	cin>>userid;
	cout<<"\t\t\t PASSWORD ";
	cin>>password;
	ifstream input("record.txt");
	while(input>>id>>pass){
		if(id == userid && pass == password){
			count= 1;
			system("cls");
		}
	}
	input.close();
	if(count==1){
			system("cls");
		cout<<userid<<" \n your LOGIN is successfull \n Thank you for logging in! \n";
			cout<<"\t\t\t______________________________________________________________________\n\n\n";
	cout<<"\t\t\t                 Welcome to our customer page                                 \n\n\n";
	cout<<"\t\t\t______________________   CUSTOMER MENU    ______________________________________\n\n\n";
			cout<<"\t\n Enter your full names: "<<endl;
			cin>>names;
			cout<<"\t\n Enter your username: "<<endl;
			cin>>userName;
			cout<<"\t\n Enter the product you want to order: ";
			cin>>product;
			cout<<"\t\n Enter the qwantity you want to order: ";
			cin>>quantity;
			cout<<"\t\n Enter the price you prefer to pay: ";
			cin>>price;
			ofstream myorder("Myorder.txt",ios::app);
			time_t tt;
			struct tm* ti;
			time(&tt);
			ti = localtime(&tt);
			myorder<<names<<"           "<<userName<<"         "<<quantity<<" ."<<product<<"             "<<price<<"                     "<<asctime(ti)<<endl;
			system("cls");
			cout<<"\n  Customer "<<names<<" "<<userName<<"  Has odered  "<<quantity<<" "<<product<<"  at  "<<asctime(ti)<<endl;
			main();
			myorder.close();
			break;
			}
	if(count!=1){
		cout<<"                                                             "<<endl;
		cout<<"                                                             "<<endl;
		cout<<"\n LOGIN ERROR \n please check your username and password \n";
		main();
	}

		}}
