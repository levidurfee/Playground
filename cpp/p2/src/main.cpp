#include <iostream>
#include <stdexcept>
#include <stdlib.h>

using namespace std;

struct Shape {
    int width;
    int height;
};

class Square;
class Rectangle;

class Box {
protected:
    int area(Shape shape) {
        return shape.width * shape.height;
    }

    Shape make(int width, int height) {
        Shape s;
        s.width = width;
        s.height = height;

        return s;
    }
public:
    Shape build(int width, int height) {
        Shape s;
        s.width = width;
        s.height = height;

        return s;
    }

    int getArea(Shape shape) {
        return area(shape);
    }
};

class Square :public Box{
public:
    Shape build(int width, int height) {
        if(width != height) {
            throw std::runtime_error("error");
        }

        return make(width, height);
    }
};

class Rectangle :public Box {
public:
    Shape build(int width, int height) {
        if(width == height) {
            throw std::runtime_error("error");
        }

        return make(width, height);
    }
};

int main()
{
    Shape shape;
    Square square;
    try {
        shape = square.build(4, 5);
    } catch(const std::runtime_error &e) {
        printf("Error\n");
    }

    shape = square.build(4, 4);

    int area = square.getArea(shape);

    printf("Area: %i\n", area);


    return 0;
}
