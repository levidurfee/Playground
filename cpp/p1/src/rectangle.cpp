#include "rectangle.h"

class Rectangle {
public:
    Rectangle_s create(int width, int height)
    {
        if(width == height) {
            printf("Not a rectangle\n");

            exit(1);
        }

        struct Rectangle_s r = {width, height};
        
        return r;
    }
};
