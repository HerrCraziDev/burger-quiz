#ifndef QUESTIONS_H
#define QUESTIONS_H

#include "question.h"
#include "dbconnection.h"
#include <QVector>
#include <QMessageBox>
#include <QDebug>

#include <stdlib.h>
#include <iostream>

using namespace std;

class Questions
{
public:
    Questions();

    QVector<Question> fetchQuestions();
};

#endif // QUESTIONS_H