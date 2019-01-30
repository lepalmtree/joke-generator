import random


# Pick up random line in a file
def randomline(filename):
    return random.choice(open(filename).readlines())


print("Generating the joke...")

# Intro
intro = randomline('parts/intro.txt')

print(intro)

# Pull up du destin... 1 chance sur 5 de se planter sur l'intro... On en ressort une autre
randomPullup = random.randrange(1, 2).__int__()
if randomPullup == 1:
    print("Euu non attend, c'est pas ça...")
    print(randomline('parts/intro.txt'))

# Corps
corps1 = randomline('parts/corps1.txt')
corps2 = randomline('parts/corps2.txt')
corps3 = randomline('parts/corps3.txt')

print(corps1 + corps2 + corps3)

# Chute
chute = randomline('parts/chute.txt')
print(chute)

# Contre-chute : 1 chance sur 10 de faire apparaître une contre-chute
randomChute = random.randrange(1, 2).__int__()
if randomChute == 1:
    print(randomline('parts/contre-chute.txt'))
