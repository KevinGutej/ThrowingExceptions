#include <iostream>
#include <string>

using namespace std;

int main()
{
    int a , b;
    cin >> a >> b;
    try {
        if(b == 0)
            throw string ("Cannot divide by 0\n");
            int c = a / b;
            int d = 1;

            if(d == 0)
            throw string ("Cannot divide by 0 in second example\n");

            int e = c / d;
            cout << "Result: " << c << '\n';
    } catch (string exception) {
        cout << exception;
        return -1;
    }
    return 0;
}



