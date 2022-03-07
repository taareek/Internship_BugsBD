# Generated by Django 2.2.5 on 2022-03-07 06:58

from django.db import migrations, models
import sqlalchemy.sql.expression


class Migration(migrations.Migration):

    dependencies = [
        ('base', '0002_workexperience'),
    ]

    operations = [
        migrations.CreateModel(
            name='AudioBox',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=100)),
                ('file', models.FileField(blank=sqlalchemy.sql.expression.false, upload_to='music/')),
            ],
        ),
        migrations.AlterField(
            model_name='contact',
            name='client_msg',
            field=models.TextField(blank=True, null=True),
        ),
    ]
