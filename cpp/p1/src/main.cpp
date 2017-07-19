#include <iostream>
#include <stdlib.h>
#include "rectangle.cpp"

using namespace std;

int main()
{
    printf("hi\n");

    Rectangle rectangle;
    Rectangle_s rs;
    rs = rectangle.create(4, 5);
    printf("Rectangle\nwidth: %i\nheight: %i\n", rs.width, rs.height);

    return 0;
}
